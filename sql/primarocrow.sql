DROP TABLE tab_rol;
DROP TABLE tab_solicitante;
DROP TABLE tab_evaluador;
DROP TABLE tab_inversion;
DROP TABLE tab_comentarios;
DROP TABLE tab_evaluacion;
DROP TABLE tab_solicitud;
DROP TABLE tab_persona;


create table tab_rol
	(
		id_rol	smallint not null,
		rol 	varchar(30) not null,

		primary key (id_rol)
	);

create table tab_persona
	(
		id_persona		bigint not null,
		tipo 			varchar(10) not null,
		nombre_persona	varchar(150)	not null,
		apellidos		varchar(50),
		correo			varchar(150)	not null,
		sexo			varchar(1)		not null,
		fecha			date 			not null,
		rol				smallint		not null,
		area_accion     varchar(30)		not null,
		tiempo_area 	varchar(20)		not null,
		password		varchar(16)		not null,
		primary key(id_persona)

	);

create table tab_solicitante
	(
		id_persona 	bigint not null,
		nivel		varchar(150)	not null,

		primary key (id_persona),
		foreign key (id_persona) references tab_persona(id_persona)
	);

create table tab_evaluador
	(
		id_persona 	bigint not null,
		area		varchar(150) not null,

		primary key (id_persona),
		foreign key (id_persona) references tab_persona(id_persona)
		);

create table tab_solicitud
	(
		id_solicitud 	smallint not null,
		id_persona 		bigint not null,
		area_proyecto 	varchar(30) not null,
		ind_compe       BOOLEAN  NOT NULL, --tiene competidores directos(TRUE) o no tiene competidores directos (FALSE)
		ganancia_esperada bigint not null,
		fase 			varchar(10) not null,
		nom_solicitud varchar(150) not null,
		fecha_creacion	date not null,
		fecha_cancelacion date not null,
		valor			bigint	not null,
		monto			bigint not null,
		tipo 			varchar(150) not null,
		estado			varchar(20) not null,
		url_pdf 		varchar(200) not null,
		url_video		varchar(200) not null,
		porcent			smallint not null,

		primary key (id_solicitud),
		foreign key (id_persona) references tab_persona(id_persona)
	);

create table tab_inversion
	(
		id_inversion smallint not null,
		id_solicitud smallint not null,
		id_persona bigint not null,
		monto 		bigint not null,
		

		primary key(id_inversion),
		foreign key (id_persona) references tab_persona(id_persona),
		foreign key (id_solicitud) references tab_solicitud(id_solicitud)
	);

create table tab_comentarios
	(
		id_comentario	smallint not null,
		id_solicitud	smallint not null,
		comentario 	varchar(200) not null,

		primary key (id_comentario),
		foreign key (id_solicitud) references tab_solicitud(id_solicitud)
	);

create table tab_evaluacion
	(
		id_evaluacion smallint not null,
		id_solicitud smallint	not null,
		id_persona 	 bigint	not null,
		evaluacion 	smallint	not null,
		comentario 	varchar(200) not null,
		ind_aut       BOOLEAN   DEFAULT TRUE  NOT NULL, --puede ser Autorizado(TRUE) o no autorizado (FALSE)

		primary key (id_evaluacion),
		foreign key(id_solicitud) references tab_solicitud(id_solicitud),
		foreign key(id_persona) references tab_persona(id_persona)

		);






















