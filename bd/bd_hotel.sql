

CREATE TABLE cliente (
    id                integer NOT NULL,
    persona_id        VARCHAR(15) NOT NULL,
    tipo_cliente_id   integer NOT NULL,
    usuario_id        integer NOT NULL
);

CREATE UNIQUE INDEX cliente__idx ON
    cliente (
        usuario_id
    ASC );

CREATE UNIQUE INDEX cliente__idxv1 ON
    cliente (
        persona_id
    ASC );

ALTER TABLE cliente ADD CONSTRAINT cliente_pk PRIMARY KEY ( id );

CREATE TABLE empleado (
    id                 integer NOT NULL,
    persona_id         VARCHAR(15) NOT NULL,
    tipo_empleado_id   integer NOT NULL,
    usuario_id         integer NOT NULL
);

CREATE UNIQUE INDEX empleado__idx ON
    empleado (
        persona_id
    ASC );

CREATE UNIQUE INDEX empleado__idxv1 ON
    empleado (
        usuario_id
    ASC );

ALTER TABLE empleado ADD CONSTRAINT empleado_pk PRIMARY KEY ( id );

CREATE TABLE hab_reserva (
    habitacion_id         VARCHAR(3) NOT NULL,
    reserva_id            integer NOT NULL,
    reserva_id1           integer NOT NULL,
    reserva_empleado_id   integer NOT NULL
);

ALTER TABLE hab_reserva
    ADD CONSTRAINT hab_reserva_pk PRIMARY KEY ( habitacion_id,
                                                reserva_id,
                                                reserva_id1,
                                                reserva_empleado_id );

CREATE TABLE habitacion (
    id                   VARCHAR(3) NOT NULL,
    tipo_habitacion_id   integer NOT NULL
);

ALTER TABLE habitacion ADD CONSTRAINT habitacion_pk PRIMARY KEY ( id );

CREATE TABLE imagen (
    id              integer NOT NULL,
    nombre_imagen   VARCHAR(30) NOT NULL,
    descripcion     VARCHAR(100),
    ruta_img        VARCHAR(100) NOT NULL
);

ALTER TABLE imagen ADD CONSTRAINT imagen_pk PRIMARY KEY ( id );

CREATE TABLE persona (
    id             VARCHAR(15) NOT NULL,
    nombres        VARCHAR(30) NOT NULL,
    apellidos      VARCHAR(30) NOT NULL,
    direccion      VARCHAR(50) NOT NULL,
    correo         VARCHAR(50) NOT NULL,
    tipo_docu_id   integer(2) NOT NULL
);

CREATE UNIQUE INDEX persona__idx ON
    persona (
        tipo_docu_id
    ASC );

ALTER TABLE persona ADD CONSTRAINT persona_pk PRIMARY KEY ( id );

CREATE TABLE reserva (
    id              integer NOT NULL,
    fecha_entrada   DATE NOT NULL,
    fecha_salida    DATE NOT NULL,
    total           integer,
    descuento       FLOAT,
    subtotal        integer,
    cliente_id      integer NOT NULL,
    empleado_id     integer NOT NULL
);

ALTER TABLE reserva
    ADD CONSTRAINT reserva_pk PRIMARY KEY ( id,
                                            cliente_id,
                                            empleado_id );

CREATE TABLE telefonos (
    id           integer NOT NULL,
    telefono     VARCHAR(10) NOT NULL,
    persona_id   VARCHAR(15) NOT NULL
);

ALTER TABLE telefonos ADD CONSTRAINT telefonos_pk PRIMARY KEY ( id );

CREATE TABLE tipo_cliente (
    id          integer NOT NULL,
    nombre      VARCHAR(30) NOT NULL,
    descuento   FLOAT
);

ALTER TABLE tipo_cliente ADD CONSTRAINT tipo_cliente_pk PRIMARY KEY ( id );

CREATE TABLE tipo_docu (
    id       integer(2) NOT NULL,
    nombre   VARCHAR(15) NOT NULL
);

ALTER TABLE tipo_docu ADD CONSTRAINT tipo_docu_pk PRIMARY KEY ( id );

CREATE TABLE tipo_empleado (
    id       integer NOT NULL,
    nombre   VARCHAR(40)
);

ALTER TABLE tipo_empleado ADD CONSTRAINT tipo_empleado_pk PRIMARY KEY ( id );

CREATE TABLE tipo_habitacion (
    id            integer NOT NULL,
    nombre_tipo   VARCHAR(30) NOT NULL,
    precio        integer NOT NULL,
    imagen_id     integer NOT NULL
);

CREATE UNIQUE INDEX tipo_habitacion__idx ON
    tipo_habitacion (
        imagen_id
    ASC );

ALTER TABLE tipo_habitacion ADD CONSTRAINT tipo_habitacion_pk PRIMARY KEY ( id );

CREATE TABLE usuario (
    id            integer NOT NULL,
    nombre_user   VARCHAR(30) NOT NULL,
    password      VARCHAR(32) NOT NULL,
    rol           integer
);

ALTER TABLE usuario ADD CONSTRAINT usuario_pk PRIMARY KEY ( id );

ALTER TABLE cliente
    ADD CONSTRAINT cliente_persona_fk FOREIGN KEY ( persona_id )
        REFERENCES persona ( id );

ALTER TABLE cliente
    ADD CONSTRAINT cliente_tipo_cliente_fk FOREIGN KEY ( tipo_cliente_id )
        REFERENCES tipo_cliente ( id );

ALTER TABLE cliente
    ADD CONSTRAINT cliente_usuario_fk FOREIGN KEY ( usuario_id )
        REFERENCES usuario ( id );

ALTER TABLE empleado
    ADD CONSTRAINT empleado_persona_fk FOREIGN KEY ( persona_id )
        REFERENCES persona ( id );

ALTER TABLE empleado
    ADD CONSTRAINT empleado_tipo_empleado_fk FOREIGN KEY ( tipo_empleado_id )
        REFERENCES tipo_empleado ( id );

ALTER TABLE empleado
    ADD CONSTRAINT empleado_usuario_fk FOREIGN KEY ( usuario_id )
        REFERENCES usuario ( id );

ALTER TABLE hab_reserva
    ADD CONSTRAINT hab_reserva_habitacion_fk FOREIGN KEY ( habitacion_id )
        REFERENCES habitacion ( id );

ALTER TABLE hab_reserva
    ADD CONSTRAINT hab_reserva_reserva_fk FOREIGN KEY ( reserva_id,
                                                        reserva_id1,
                                                        reserva_empleado_id )
        REFERENCES reserva ( id,
                             cliente_id,
                             empleado_id );

ALTER TABLE habitacion
    ADD CONSTRAINT habitacion_tipo_habitacion_fk FOREIGN KEY ( tipo_habitacion_id )
        REFERENCES tipo_habitacion ( id );

ALTER TABLE persona
    ADD CONSTRAINT persona_tipo_docu_fk FOREIGN KEY ( tipo_docu_id )
        REFERENCES tipo_docu ( id );

ALTER TABLE reserva
    ADD CONSTRAINT reserva_cliente_fk FOREIGN KEY ( cliente_id )
        REFERENCES cliente ( id );

ALTER TABLE reserva
    ADD CONSTRAINT reserva_empleado_fk FOREIGN KEY ( empleado_id )
        REFERENCES empleado ( id );

ALTER TABLE telefonos
    ADD CONSTRAINT telefonos_persona_fk FOREIGN KEY ( persona_id )
        REFERENCES persona ( id );

ALTER TABLE tipo_habitacion
    ADD CONSTRAINT tipo_habitacion_imagen_fk FOREIGN KEY ( imagen_id )
        REFERENCES imagen ( id );