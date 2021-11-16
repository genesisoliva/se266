CREATE TABLE IF NOT EXISTS resturant (
resturant_id VARCHAR UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY,
resturant_address VARCHAR DEFAULT NULL,
resturant_city VARCHAR DEFAULT NULL,
resturant_state CHAR(2) DEFAULT NULL,
resturant_zipcode VARCHAR,
resturant_phonenumber CHAR(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS employee (
resturant_id VARCHAR(10) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY,
resturant_fullname VARCHAR(20) DEFAULT NULL,
resturant_payrate NUMBER(2,2) DEFAULT NULL,
resturant_role CHAR(2) DEFAULT NULL,
resturant_zipcode VARCHAR,
resturant_phonenumber CHAR(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

