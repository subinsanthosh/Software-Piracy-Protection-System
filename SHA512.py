from MACid import encText
import hashlib

print('\n', end='')
j = input('Generate Key2 ? Y or N \n').upper()
print('\n', end='')

if j == 'Y':

    str2 = str(encText)

    result2 = hashlib.sha512(str2.encode())
    key2 = result2.hexdigest()
    print("Generated key2: ")
    print(key2)
    print('\n', end='')

    a = input('Send Key2 to User? Y or N \n').upper()
    print('\n', end='')
    print("Key2 is sent from Admin to User. ")

else:
    pass
