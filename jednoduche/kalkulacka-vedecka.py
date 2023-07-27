import math

print("Vědecká kalkulačka")

while True:
    print("Vyberte si operaci.")
    print("1. Sčítání")
    print("2. Odečítání")
    print("3. Násobení")
    print("4. Dělení")
    print("5. Mocnina")
    print("6. Druhá odmocnina")
    print("7. Sinus")
    print("8. Cosinus")
    print("9. Tangens")
    print("10. Cotangens")
    print("11. Logaritmus")
    print("12. Exit")

    choice = input("Zadejte volbu (1/2/3/4/5/6/7/8/9/10/11/12): ")

    if choice == '12':
        break

    if choice == '5':
        base = float(input("Zadejte základ mocniny: "))
        exponent = float(input("Zadejte exponent: "))
        result = base ** exponent
        print("Výsledek:", result)

    elif choice == '6':
        num = float(input("Zadejte číslo: "))
        result = math.sqrt(num)
        print("Výsledek:", result)

    elif choice == '11':
        num = float(input("Zadejte číslo: "))
        base = float(input("Zadejte základ logaritmu: "))
        result = math.log(num, base)
        print("Výsledek:", result)

    else:
        num1 = float(input("Zadejte první číslo: "))
        num2 = float(input("Zadejte druhé číslo: "))

        if choice == '1':
            print("Výsledek:", num1 + num2)

        elif choice == '2':
            print("Výsledek:", num1 - num2)

        elif choice == '3':
            print("Výsledek:", num1 * num2)

        elif choice == '4':
            print("Výsledek:", num1 / num2)

        elif choice == '7':
            result = math.sin(num1)
            print("Výsledek:", result)

        elif choice == '8':
            result = math.cos(num1)
            print("Výsledek:", result)

        elif choice == '9':
            result = math.tan(num1)
            print("Výsledek:", result)

        elif choice == '10':
            result = 1 / math.tan(num1)
            print("Výsledek:", result)

        else:
            print("Neplatná volba")