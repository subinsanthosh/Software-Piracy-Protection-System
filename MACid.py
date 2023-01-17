from cryptography.fernet import Fernet
import getmac
import hashlib

print('\n', end='')
mac = getmac.get_mac_address()
print("This is the MAC ID: ", mac)
print('\n', end='')

macVal = ''.join(mac.upper().split(":"))
print(macVal)

text = macVal
key = Fernet.generate_key()
fernet = Fernet(key)

print("Encryption Key:", key)
print('\n', end='')

encText = fernet.encrypt(text.encode())

# print("My string: ", text)
print("Encrypting MAC ID (Temporary User ID): ", encText)
print('\n', end='')
q = input('Send User ID to the Admin? Y or N \n').upper()
print('\n', end='')

if q == 'Y':

    str1 = str(encText)

    result1 = hashlib.sha512(str1.encode())
    key1 = result1.hexdigest()
    print("Key1 generated in users system : ")
    print(key1)
else:
    pass
