CREATE TABLE static_countries (
  cn_short_sr varchar(100) DEFAULT '' NOT NULL,
  cn_official_name_sr varchar(200) DEFAULT '' NOT NULL,
  cn_capital_sr varchar(45) DEFAULT '' NOT NULL,
  KEY cn_short_sr (cn_short_sr)
);

CREATE TABLE static_country_zones (
  zn_name_sr varchar(50) DEFAULT '' NOT NULL,
  KEY zn_name_sr (zn_name_sr)
);

CREATE TABLE static_currencies (
  cu_name_sr varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_sr varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_sr varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_sr varchar(50) DEFAULT '' NOT NULL
);

