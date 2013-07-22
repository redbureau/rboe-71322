CREATE TABLE IF NOT EXISTS `form_plist` (
id bigint(20) NOT NULL auto_increment,
date datetime default NULL,
pid bigint(20) default NULL,
user varchar(255) default NULL,
groupname varchar(255) default NULL,
authorized tinyint(4) default NULL,
activity tinyint(4) default NULL,
pl_high_risk longtext,
pl_family_history longtext,
pl_reactions	longtext,
pl_medications  longtext,
pl_problem_1	longtext,
pl_problem_2	longtext,
pl_problem_3	longtext,
pl_problem_4	longtext,
pl_problem_5	longtext,
pl_problem_6	longtext,
pl_problem_7	longtext,
pl_problem_8	longtext,
pl_problem_9	longtext,
pl_problem_10	longtext,
pl_problem_11	longtext,
pl_problem_12	longtext,
pl_problem_13	longtext,
pl_problem_14	longtext,
pl_problem_15	longtext,
pl_problem_16	longtext,
pl_problem_17	longtext,
pl_problem_18	longtext,
pl_problem_19	longtext,
pl_problem_20	longtext,
pl_problem_21	longtext,
pl_problem_22	longtext,
pl_problem_23	longtext,
pl_problem_24	longtext,
pl_problem_25	longtext,
PRIMARY KEY (id)
) ENGINE=MyISAM;
