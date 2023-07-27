morse_dict = {'A': '.-', 'B': '-...', 'C': '-.-.', 'D': '-..', 'E': '.', 'F': '..-.', 'G': '--.', 'H': '....', 'I': '..', 'J': '.---', 'K': '-.-', 'L': '.-..', 'M': '--', 'N': '-.', 'O': '---', 'P': '.--.', 'Q': '--.-', 'R': '.-.', 'S': '...', 'T': '-', 'U': '..-', 'V': '...-', 'W': '.--', 'X': '-..-', 'Y': '-.--', 'Z': '--..', '0': '-----', '1': '.----', '2': '..---', '3': '...--', '4': '....-', '5': '.....', '6': '-....', '7': '--...', '8': '---..', '9': '----.'}

def text_to_morse(text):
    morse_code = ''
    for char in text.upper():
        if char in morse_dict:
            morse_code += morse_dict[char] + ' '
        elif char == ' ':
            morse_code += '/ '
    return morse_code.strip()

text = input('Zadej text pro překlad do Morseovy abecedy: ')
morse = text_to_morse(text)
print(morse)

with open('morse.txt', 'w') as file:
    file.write(morse)