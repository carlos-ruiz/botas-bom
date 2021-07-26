# init.sql

create database techincm_botasbom;
use techincm_botasbom;
source /db/techincm_botasbom.sql;

create user appuser identified by "appuserPasswd";
grant all privileges on techincm_botasbom.* to appuser@'%';