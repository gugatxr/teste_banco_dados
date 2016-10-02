create database db_performance;

create table tb_performance(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  servidor VARCHAR(200) NOT NULL,
  porta VARCHAR(200) NOT NULL,
  navegacao VARCHAR(200) NOT NULL,
  pagina VARCHAR(200) NOT NULL,
  data DATE NOT NULL
);
