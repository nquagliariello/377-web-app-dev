file = open("day5.txt", "r")
lines = file.readlines()

stacks = [
    ['Z','N'],
    ['M','C','D'],
    ['P']
]

mainStacks = [
    ['D','B','J','V'],
    ['P','V','B','W','R','D','F'],
    ['Q','W','C','D','L','F','G','R'],
    ['B','D','N','L','M','P','J','W'],
    ['Q','S','C','P','B','N','H'],
    ['G','N','S','B','D','R'],
    ['H','S','F','Q','M','P','B','Z'],
    ['F','L','W'],
    ['R','M','F','V','S']
]
for line in lines:
    line = line.strip()
    words = line.split(' ')
    num_blocks = int(words[1])
    source = int(words[3]) - 1
    destination = int(words[5]) - 1

    # for i in range(num_blocks):
    #     block = mainStacks[source].pop()
    #     mainStacks[destination].append(block)

    stacks[destination] = stacks[destination] + stacks[source][-num_blocks:]
    del stacks[source][-num_blocks:]

for i in range(len(mainStacks)):   
    print(mainStacks[i][-1], end='')
