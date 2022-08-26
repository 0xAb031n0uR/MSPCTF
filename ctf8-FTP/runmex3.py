import random

num = random.choice(range(10, 32))

print('If ' + str(num) + ' is in decimal base, what is it in binary base?')

ans = input('Answer: ')

try:
    ans_num = int(ans, base=2)

    if ans_num == num:
        flag = "VkZaT1VWRXhVa2RsZWtKMVRWVTVkVmd3ZHpCbFZFNVRabEU5UFE9PQ=="
        print('That is correct! Here\'s your flag: ' + flag)
    else:
        print(str(ans_num) + ' and ' + str(num) + ' are not equal.')

except ValueError:
    print('That isn\'t a binary number. Binary numbers contain only 1\'s and 0\'s only')
