create table generos
( 
   nombre text NOT NULL,
   PRIMARY KEY(nombre)
   );
   
create table carreras
(
id bigserial NOT NULL,
nombre text NOT NULL,
PRIMARY KEY (id)
);

create table semestres 
( 
 id bigserial NOT NULL,
 nombre text NOT NULL,
 PRIMARY KEY (id)
 );
 create table grupos 
 (
   id bigserial NOT NULL,
   nombre text NOT NULL,
   n_carrera bigint NOT NULL,
   n_semestre bigint NOT NULL,

   PRIMARY KEY (id),
   FOREIGN KEY (n_carrera) REFERENCES carreras(id),
   FOREIGN KEY (n_semestre) REFERENCES semestres(id)
   
   
   );
    
   
create table alumnos
(
   id bigserial NOT NULL,
   nombre text NOT NULL,
   paterno text NOT NULL,
   materno text,
   edad integer,
   telefono text,
   correo text,
   genero text,
   n_carrera bigint,

   PRIMARY KEY (id),
   FOREIGN KEY (n_carrera) REFERENCES carreras(id),
   CHECK (edad >=0)
   );

   create table docentes
     
   ( 
    id bigserial NOT NULL,
    nombre text NOT NULL,
    paterno text NOT NULL,
    materno text,
    telefono text NOT NULL,
    correo text NOT NULL,
    direccion text,
    facebook text,
    PRIMARY KEY (id)
    );

     create table sesionesdelplantutorial
     (  
      id bigserial NOT NULL,
      actividad text,
      objetivo text,
      fecha text,
      PRIMARY KEY (id)
      );

      create table periodosemestral
      ( 
      id bigserial NOT NULL,
      n_carrera bigint NOT NULL,
      n_semestre bigint NOT NULL,
      n_grupo bigint NOT NULL,
      periodo text NOT NULL,

	PRIMARY KEY (id),
     FOREIGN KEY (n_carrera) REFERENCES carreras(id),
   FOREIGN KEY (n_semestre) REFERENCES semestres(id),
   FOREIGN KEY (n_grupo) REFERENCES grupos(id)
   
       


       );


    create table diag_grupal
    (
     id bigserial NOT NULL,
     n_docente bigint NOT NULL,
     descripcion_general text NOT NULL,
     alumno_irregular text NULL,
     plan_estudio bigint NOT NULL,

      
    
    PRIMARY KEY(id),
     FOREIGN KEY (n_docente) REFERENCES docentes(id)

    );