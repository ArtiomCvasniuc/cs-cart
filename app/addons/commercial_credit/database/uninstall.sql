ALTER TABLE `?:users`
DROP COLUMN commercial_credit_enabled;
ALTER TABLE `?:users`
DROP COLUMN commercial_credit_limit;
ALTER TABLE `?:users`
DROP COLUMN commercial_credit;

DELETE FROM `?:status_data`
WHERE param = 'commercial_credit';