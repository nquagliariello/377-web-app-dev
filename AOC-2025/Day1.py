file = open("Day1.txt", "r")
lines = file.readlines()

totalzero = 0
current = 50
for line in lines:
    line = line.strip()
    
    distance = int(line[1:])

    for i in range(distance):
        
        if line[0] == 'R':
            current = (current + 1) % 100 
        elif line[0] == 'L':
            current = (current - 1) % 100

        if current == 0:
            totalzero += 1


print(current)
print(totalzero)

# 50 - 68 % 

    
