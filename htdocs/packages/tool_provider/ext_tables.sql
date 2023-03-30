#
# Modifying pages table
#
CREATE TABLE pages (
	logo int(11) unsigned DEFAULT '0' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	twitter_link varchar(255) DEFAULT '' NOT NULL,
	facebook_link varchar(255) DEFAULT '' NOT NULL,
	instagram_link varchar(255) DEFAULT '' NOT NULL,
    youtube_link varchar(255) DEFAULT '' NOT NULL,
	linkedin_link varchar(255) DEFAULT '' NOT NULL,
);