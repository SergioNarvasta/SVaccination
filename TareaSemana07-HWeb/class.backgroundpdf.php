<?php

  class backgroundPDF extends Cezpdf
  {
    var $bg_type;
    var $bg_color = array();
    var $bg_img;
    var $bg_img_width;
    var $bg_img_height;
    var $bg_img_xpos;
    var $bg_img_ypos;
    var $bg_img_type;
    var $bg_img_types_jpg = array('jpg', 'jpeg', 'pjpg', 'pjpeg');
    var $bg_img_types_png = array('png');

    /****************************************
     * backgroundPDF
     * -------------
     * Input:
     *   $paper       : similar to Cezpdf-constructor
     *   $orientation : similar to Cezpdf-constructor
     *   $type        : { 'none' | 'color' | 'colour' | 'image' }
     *   $options     : if type == 'color' or 'colour':
     *                    $options['r'] = red-component   of backgroundcolour ( 0 <= r <= 1)
     *                    $options['g'] = green-component of backgroundcolour ( 0 <= g <= 1)
     *                    $options['b'] = blue-component  of backgroundcolour ( 0 <= b <= 1)
     *                  if type == 'image':
     *                    $options['img']    = location of image file; URI's are allowed if allow_url_open is enabled in php.ini
     *                    $options['width']  = width of background image; default is width of page
     *                    $options['height'] = height of background image; default is height of page
     *                    $options['xpos']   = horizontal position of background image; default is 0
     *                    $options['ypos']   = vertical position of background image; default is 0
     ****************************************/
    function backgroundPDF($paper = 'a4', $orientation = 'portrait', $type = 'none', $options = array())
    {
      $this->Cezpdf($paper, $orientation);
      switch ($type)
      {
        case 'color'  :
        case 'colour' :
                        $this->bg_type = 'colour';
                        $this->saveState();
                        if (is_float($options['r']) && is_float($options['g']) && is_float($options['b']))
                        {
                          $this->bg_color = array('r' => $options['r'], 'g' => $options['g'], 'b' => $options['b']);
                          $this->setColor($this->bg_color['r'], $this->bg_color['g'], $this->bg_color['b'], 1);
                        }
                        else
                          $this->bg_color = array(1, 1, 1);
                        $this->filledRectangle(0, 0, $this->ez['pageWidth'], $this->ez['pageHeight']);
                        $this->restoreState();
                        break;
        case 'image'  :
                        $this->bg_type = 'image';
                        if (isset($options['img']))
                        {
                          $bg_img_types = array_merge($this->bg_img_types_jpg, $this->bg_img_types_png);
                          $bg_img_ext = strtolower(substr($options['img'], strpos($options['img'], '.') + 1));

                          if (is_array($this->bg_img_types_jpg) && in_array($bg_img_ext, $this->bg_img_types_jpg))
                            $this->bg_img_type = 'jpg';
                          else if (is_array($this->bg_img_types_png) && in_array($bg_img_ext, $this->bg_img_types_png))
                            $this->bg_img_type = 'png';
                          else
                            $this->bg_img_type = NULL;
                        }
                        else
                          $this->bg_img_type = NULL;

                        // Don't continue if image does not exist, or if image has a wrong type
                        if (!isset($options['img']) || (!isset($this->bg_img_type)) || !file_exists($options['img']))
                        {
                        if (!file_exists($options['img']))
                          echo $options['img'];
                          $this->bg_type = 'none';
                          break;
                        }
                        $this->bg_img = $options['img'];
                        if (is_numeric($options['width']))  $this->bg_img_width  = $options['width'];  else $this->bg_img_width  = $this->ez['pageWidth'];
                        if (is_numeric($options['height'])) $this->bg_img_height = $options['height']; else $this->bg_img_height = $this->ez['pageHeight'];
                        if (is_numeric($options['xpos']))   $this->bg_img_xpos   = $options['xpos'];   else $this->bg_img_xpos   = 0;
                        if (is_numeric($options['ypos']))   $this->bg_img_ypos   = $options['ypos'];   else $this->bg_img_ypos   = 0;
                        switch ($this->bg_img_type)
                        {
                          case 'jpg' : $this->addJpegFromFile($this->bg_img, $this->bg_img_xpos, $this->bg_img_ypos, $this->bg_img_width, $this->bg_img_height); break;
                          case 'png' : $this->addPngFromFile($this->bg_img, $this->bg_img_xpos, $this->bg_img_ypos, $this->bg_img_width, $this->bg_img_height);  break;
                        }
                        break;
        case 'none'   :
        default      :
                        $this->bg_type = 'none';
                        break;
      }
    }

    /****************************************
     * ezNewPage
     * ---------
     * Just an overloading function
     ****************************************/
    function ezNewPage($insert = 0, $id = 0, $pos = 'after')
    {
      parent::ezNewPage($insert, $id, $pos);
      switch ($this->bg_type)
      {
        case 'colour' :
                        $this->saveState();
                        $this->setColor($this->bg_color['r'], $this->bg_color['g'], $this->bg_color['b'], 1);
                        $this->filledRectangle(0, 0, $this->ez['pageWidth'], $this->ez['pageHeight']);
                        $this->restoreState();
                        break;
        case 'image'  :
                        switch ($this->bg_img_type)
                        {
                          case 'jpg' : $this->addJpegFromFile($this->bg_img, $this->bg_img_xpos, $this->bg_img_ypos, $this->bg_img_width, $this->bg_img_height); break;
                          case 'png' : $this->addPngFromFile($this->bg_img, $this->bg_img_xpos, $this->bg_img_ypos, $this->bg_img_width, $this->bg_img_height);  break;
                        }
                        break;
        case 'none'   :
        default      :
                        break;
      }
    }
  }

?>
