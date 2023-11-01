#
# Create table structure for 'tx_recordtest_record'
#
CREATE TABLE tx_recordtest_record (
    title varchar(255) DEFAULT '' NOT NULL,
    custom_description varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    slug varchar(2048),
);
