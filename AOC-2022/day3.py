file = open("day3.txt", "r")
lines = file.readlines()

alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
# rucksack = "jqHRNqRjqzjGDLGLrsFMfFZSrLrFZsSL"

# print(len(rucksack)//2)
# first_half = rucksack[:len(rucksack)//2]
# second_half = rucksack[len(rucksack)//2:]

# print(rucksack)
# print(first_half)
# print(second_half)

# for letter in first_half:
#     if letter in second_half:
#         print("Found common letter: " + letter)
#         print(alphabet.index(letter) + 1)
#         break
score = 0
for line in lines (3):
    counter += 1
    line = line.strip()
    first_half = line[:len(line)//2]
    second_half = line[len(line)//2:]
    for letter in first_half:
        if letter in second_half:
            score += alphabet.index(letter) + 1
            break

print(score)


r1 = "wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn"
r2 = "ttgJtRGJQctTZtZT"
r3 = "CrZsJsPPZsGzwwsLwLmpwMDw"

counter = 0

if counter % 3 = 0:
    
    for letter in r1:
        if letter in r2 and letter in r3:
            print("Found it " + letter)
            break