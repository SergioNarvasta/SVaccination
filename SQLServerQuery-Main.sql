/****** Script for SelectTopNRows command from SSMS  ******/

  CREATE TABLE Paciente
(
	   Dni int NOT NULL
      ,[A Paterno]varchar(20)NOT NULL
      ,[A Materno]varchar(20)NOT NULL
      ,[Nombres]varchar(15)NOT NULL
      ,[Genero]varchar(10)NOT NULL
      ,[Edad] int NOT NULL
      ,[Fecha Nac] date NOT NULL
      ,[Celular] int NOT NULL
      ,[Direccion]varchar(20) NOT NULL
      ,[Dosis] varchar(15) NOT NULL
      ,[Fecha Dosis] date NOT NULL
      ,[Centro Vac] varchar(15) NOT NULL
      ,[Factores]varchar(30),
);
GO

INSERT INTO Paciente
([Dni],[A Paterno] ,[A Materno] ,[Nombres],[Genero],[Edad],[Fecha Nac],[Celular] ,[Direccion],[Dosis],[Fecha Dosis],[Centro Vac],[Factores])
  VALUES 
(7655423,'PEREZ','LOPEZ','JUAN CARLOS','M',24,'1997-05-18 00:00:00',9803457,'AV LAS FLORES 2324','2da Dosis','2022-02-25 00:00:00','Hospital ','Normal';
7655423,'PEREZ','LOPEZ','JUAN CARLOS','M',24,'1997-05-18 00:00:00',9803457,'AV LAS FLORES 2324','2da Dosis','2022-02-25 00:00:00','Hospital ','Normal';
7655423,'PEREZ','LOPEZ','JUAN CARLOS','M',24,'1997-05-18 00:00:00',9803457,'AV LAS FLORES 2324','2da Dosis','2022-02-25 00:00:00','Hospital ','Normal';
7655423,'PEREZ','LOPEZ','JUAN CARLOS','M',24,'1997-05-18 00:00:00',9803457,'AV LAS FLORES 2324','2da Dosis','2022-02-25 00:00:00','Hospital ','Normal')