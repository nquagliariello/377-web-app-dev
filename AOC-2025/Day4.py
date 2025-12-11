file = open("Day4.txt", "r")
lines = file.readlines()

total = 0
grid = []

for line in lines:
    line = line.strip()
    grid.append([x for x in line])

# go through each letter to see if the one before or after have a @
for r in range(len(grid)):
    for c in range(len(grid[0])):
        # check the row below to see if there are any @ if so add 1 to total
        next = 0
        if grid[r][c] != ".":

            if r > 0 and grid[r-1][c] != ".":
                next += 1
            if r > 0 and c < len(grid) - 1 and grid[r-1][c+1] != ".":
                next += 1
            if r > 0 and c > 0 and grid [r-1][c-1] != ".":
                next += 1
            # check next to the loco and see if there are nay @ if so add 1 total
            if c < len(grid) - 1 and grid[r][c+1] != ".":
                next += 1
            if c > 0 and grid[r][c-1] != ".":
                next += 1
            # check above the loco to see if there are any @ if so add 1 to total
            if r < len(grid) -  1 and grid[r+1][c] != ".":
                next += 1
            if r < len(grid) - 1 and c < len(grid) - 1 and grid[r+1][c+1] != ".":
                next += 1
            if r < len(grid) - 1 and c > 0 and grid[r+1][c-1] != ".":
                next += 1
            if next <= 3:
                total += 1
                grid[r][c] = "x"
    
print(total)