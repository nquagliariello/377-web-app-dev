file = open("day1.txt", "r")
lines = file.readlines()


for line in lines:

    throws = line.strip().split('')
    mythrow = throws[0]
    opponetthrow = throws[1]
    points = 0


    if mythrow == "X":
        points += 1
    elif mythrow == "Y":
        points += 2
    else:
        points += 3
    
    if mythrow == "X" and opponetthrow == "C":
        points += 6
    
    




    print('opponet throw ' + throws[0])
    print("My throw: " + throws[1])
    print('Results: ' + )