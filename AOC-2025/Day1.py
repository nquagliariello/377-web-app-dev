file = open("Day1.txt", "r")
lines = file.readlines()

totalzero = 0
current = 50
for line in lines:
    line = line.strip()
    if current == 0:
        totalzero += 1
    elif line[0] == 'R':
        line += current 
    elif line[0] == 'L':
        line -= current
print(current)
print(totalzero)


    
