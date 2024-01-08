ALTER TABLE `?:users`
ADD COLUMN commercial_credit_enabled char(1) NOT NULL DEFAULT 'A';
ALTER TABLE `?:users`
ADD COLUMN commercial_credit_limit decimal(12,2) NOT NULL DEFAULT 500.00;
ALTER TABLE `?:users`
ADD COLUMN commercial_credit decimal(12,2) NOT NULL DEFAULT 0.00;

INSERT INTO `?:status_data`(status_id, param, value)
SELECT status_id, 'commercial_credit', 'I' FROM `?:statuses` WHERE `?:statuses`.type = 'O';