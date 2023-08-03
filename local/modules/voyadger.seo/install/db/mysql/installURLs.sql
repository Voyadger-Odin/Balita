create table if not exists voyadger_seo_urls
(
    ID int(11) NOT NULL auto_increment,
    active boolean,
    title varchar(50),
    keywords varchar(255),
    description varchar(255),
    h1 varchar(50),
    text text,
    url varchar(255),
    PRIMARY KEY(ID)
);