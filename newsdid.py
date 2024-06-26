import requests

url = "https://vault-api.stardust.gg/v1/profile"

payload = {
    "applicationId": "5ef75b96-0ac3-4f66-b5c9-eb5cf10d2202",
    "name": "trial"
}
headers = {
    "x-api-key": "31258db4-70f1-45b4-bfee-efbb121c4f1b",
    "Content-Type": "application/json"
}

response = requests.request("POST", url, json=payload, headers=headers)

print(response.text)
