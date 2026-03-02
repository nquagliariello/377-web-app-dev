
def convert_to_string(number):
    string_number = str(number)

    reverse_string = str(number[:: -1])

    if string_number == reverse_string:
        return True
    return False

palendrome = 0
total = 0
for i in range (100, 1000):
    for j in range (100, 1001):
        total = i * j
        palendrome = str(total)
        if palendrome == palendrome [::-1]
    

#     print(palendrome)

print(convert_to_sring(1000))