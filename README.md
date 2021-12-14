# calculator-markid

# Project installation
1. Clone repository
```
git clone https://github.com/Pofke/calculator-markid.git
```

2. Go to project folder
```
cd calculator-markid
```

3. Make Composer install project dependencies 
```
composer install
```

4. Run Application:
```
symfony serve
```

5. Go to:
```
https://localhost:8000/
Port can differ if more applications started earlier. Check terminal to be sure.
```

# Usage

Top right corner has three boxes. In the first and last box write two numbers as arguments. Middle box is for aritmetic operation. Aritmetic operations are based on emojis:
| Emoji    | Aritmetic Operation |
| -------- |:-------------------:|
|  :alien: |      addition       |
|  :skull: |    subtraction      |
|  :ghost: |   multiplication    |
| :scream: |      division       |

After you change any input or select any operation, application will calculate result. 

All inputs must be filled. 

### And remember: You can not :scream: by 0!


# Author
Povilas Baranskas, 2021.
