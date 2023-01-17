from SHA512 import key2
from MACid import key1

print("\n")

j = input('Enter key here:  ')
print('\n', end='')

if key1 == j:
    print('\033[1;32m User Authenticated')

else:
    print("\033[1;31m Incorrect Key")
