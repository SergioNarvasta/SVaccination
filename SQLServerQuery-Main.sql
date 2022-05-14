/****** Script for SelectTopNRows command from SSMS  ******/

  CREATE TABLE Paciente
(
       [Codigo]int identity,
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
    primary key (Codigo)
);
GO
SELECT TOP (1000)
        Dni
      ,[A Paterno]
      ,[A Materno]
      ,[Nombres]
      ,[Genero]
      ,[Edad]
      ,[Fecha Nac]
      ,[Celular]
      ,[Direccion]
      ,[Dosis]
      ,[Fecha Dosis]
      ,[Centro Vac]
      ,[Factores]
  FROM [BDSystemV].[dbo].[Paciente]
  go

INSERT INTO Paciente VALUES(7655423,'PEREZ','LOPEZ','JUAN CARLOS','M',24,24/11/1997,980345765,'AV LAS FLORES 2324','2da Dosis',24,24/04/2022,'Hospital ','Normal');
