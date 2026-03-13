import random
from sys import argv 

SPEC = "!@#$%^&*()_<M>?:{}|"

if len(argv) == 3:
    length = int(argv[1])

    number = "0" in argv[2]
    lower = "a" in argv[2]
    upper = "A" in argv[2]
    special = "!" in argv[2]

# script, r, h = argv

elif len(argv) == 1:

    length = int(input('How long is your password? '))

    numbers = int(input('How many numbers are in your password? '))

    upper = input('Would you like an uppercase?[Y/N] ').upper()[0] == "Y"

    lower = input('Would you like a lowercase? [Y/N] ').upper()[0] == "Y"

    special = input('Would you like a special character? [Y/N] ').upper()[0] == "Y"
else:
    print("Expected useage: password-generator.py LENTH PATTERN")
    print("where patternmcontaonns one or more of the following Aa0")
    exit()

password = []

if numbers:
    password.append(str(random.randint(0,9)))
if upper:
    password.append(chr(ord("A") + random.randint(0,25)))
if lower:
    password.append(chr(ord("a") +random.randint(0,25)))
if special:
    password.append(SPEC[random.randint(0,len((SPEC) -1))])


while len(password) < length:
    choice = random.randint(1,4)

    if choice == 1 and numbers:
        password.append(str(random.randint(0,9)))
    if choice == 2 and upper:
        password.append(chr(ord("A") + random.randint(0,25)))
    if choice == 3 and lower:
        password.append(chr(ord("a") +random.randint(0,25)))
    if choice == 4 and special:
        password.append(password.append (SPEC[random.randint(0,len((SPEC) -1))]))


random.shuffle(password)
print("".join(password))

