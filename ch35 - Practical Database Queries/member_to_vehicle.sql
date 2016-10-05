CREATE TABLE member_to_vehicle (
   id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
   member_id SMALLINT UNSIGNED NOT NULL,
   vehicle_id TINYINT UNSIGNED NOT NULL,
   PRIMARY KEY(member_id, vehicle_id));
