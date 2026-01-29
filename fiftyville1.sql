-- Finds the crime on june 28 2023 
-- SELECT *
-- FROM crime_scene_reports
-- WHERE month = 7 and day = 28 
-- ;

-- fetches all the interviews containing the word bakery at june 28 2023
-- SELECT * 
-- FROM interviews
-- WHERE month = 7 and day = 28 and transcript like '%bakery%'
-- ;

-- Finds the phone call between the possible side kick and robber
-- SELECT * 
-- FROM phone_calls
-- WHERE year = 2023 and month = 7 and day = 28 and duration < 60 --  and caller = '(286) 555-6063'
-- ;

-- finds who the possible robber is using the call phone number
-- Select *
-- FROM people
-- WHERE phone_number = '(676) 555-6554'
-- ;

-- Finds all the cars entering and exiting the bakery after 10:30 one july 28 2023
-- SELECT *
-- FROM bakery_security_logs
-- WHERE month = 7 and day = 28 and hour = 10 and minute >= 30 and activity = 'exit
-- ;

-- people who dirve the cars in the log
select * 
from people
where license_plate in (select license_plate
from bakery_security_logs
where year = 2023 and money = 7 and day = 28 and hour = 10 and minute <= 25 and activty = 'exit')
;


-- Finds where this person has been traveling
-- SELECT *
-- FROM passengers
-- WHERE passport_number = '2438825627'
-- ;

-- SELECT *
-- FROM flights
-- WHERE id = 10 or id = 21 or id = 47
-- ;

-- Finds the person whos lisense plate is 1106N58
-- SELECT * 
-- FROM people
-- WHERE license_plate LIKE '1106N58'
-- ;

-- gets all atm transactions from leggett st and prints all the people with their info
-- SELECT  person_id, people.name, people.phone_number, people.passport_number, license_plate
-- FROM atm_transactions 
-- JOIN bank_accounts ON atm_transactions.account_number = bank_accounts.account_number
-- JOIN people ON bank_accounts.person_id = people.id
-- WHERE atm_location LIKE 'Leggett Street' and month = 7 and day = 28
-- ;

-- Gets the people from the plane and their names
-- SELECT passengers.passport_number, people.passport_number, people.name
-- FROM passengers 
-- JOIN people ON passengers.passport_number = people.passport_number
-- ;