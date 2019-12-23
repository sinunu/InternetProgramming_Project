import requests
import sys
import chardet
if len(sys.argv) != 2:
    print('incorect')
    sys.exit()
response =requests.get(sys.argv[1])
print(response.content.decode('utf-8'))
