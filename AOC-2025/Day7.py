file = open("Day7.txt", "r")
lines = file.readlines()

rows = []

for line in lines:
    line = line.strip()
    rows.append(line)

beams = {rows[0].index("S")}

total = 0

for i in range(1,len(rows)):
    next_beams = set()
    row = rows[i]
    for beam in beams:
        if row[beam] == "^":
            total += 1
            if beam - 1 >= 0:
                next_beams.add(beam - 1)
            if beam + 1 < len(row):
                next_beams.add(beam + 1)
        else:
            next_beams.add(beam)
    beams = next_beams

print(total)


