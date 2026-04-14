-- Para fazer o ER e o Modelo Relacional usamos o software Dia
DROP DATABASE IF EXISTS ifnotes;

CREATE DATABASE ifnotes;

\c ifnotes;

CREATE TABLE usuario (
    id serial primary key,
    nome character varying(200) not null,
    email character varying(200) unique,
    senha character varying(200) not null
);

CREATE TABLE anotacao (
    id serial primary key,
    titulo text not null,
    texto text not null,
    data_hora timestamp default current_timestamp,
    usuario_id integer references usuario (id)
);
