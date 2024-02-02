CREATE TABLE tx_productoverview_domain_model_product (
	title varchar(255) NOT NULL DEFAULT '',
	price varchar(255) NOT NULL DEFAULT '',
	categories int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_productoverview_domain_model_category (
	product int(11) unsigned DEFAULT '0' NOT NULL,
	category varchar(255) NOT NULL DEFAULT ''
);
