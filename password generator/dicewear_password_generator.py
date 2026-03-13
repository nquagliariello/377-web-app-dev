import random 
file = open('dicewear.txt', 'r')
lines = file.readlines()

words = []

for i in range(6):
    d1 = random.randint(1,6)
    d2 = random.randint(1,6)
    d3 = random.randint(1,6)
    d4 = random.randint(1,6)
    d5 = random.randint(1,6)

    words.append(lines[d1].strip())
    words.append(lines[d2].strip())
    words.append(lines[d3].strip())
    words.append(lines[d4].strip())
    words.append(lines[d5].strip())

    for line in lines:
        line = line.strip()
        line = line.split(" ")
