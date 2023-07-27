import random

def get_user_choice():
    while True:
        user_choice = input("Vyberte kámen, nůžky nebo papír: ").lower()
        if user_choice in ['kámen', 'nůžky', 'papír']:
            return user_choice
        else:
            print("Neplatná volba. Zkuste to znovu.")

def get_computer_choice():
    return random.choice(['kámen', 'nůžky', 'papír'])

def determine_winner(user_choice, computer_choice):
    if user_choice == computer_choice:
        return "Remíza"
    elif (
        (user_choice == 'kámen' and computer_choice == 'nůžky') or
        (user_choice == 'nůžky' and computer_choice == 'papír') or
        (user_choice == 'papír' and computer_choice == 'kámen')
    ):
        return "Vyhrál/a jste!"
    else:
        return "Počítač vyhrál."

def play_game():
    print("Vítejte ve hře Kámen, nůžky, papír!")
    while True:
        user_choice = get_user_choice()
        computer_choice = get_computer_choice()

        print(f"Vybrali jste: {user_choice}")
        print(f"Počítač vybral: {computer_choice}")

        result = determine_winner(user_choice, computer_choice)
        print(result)

        play_again = input("Chcete hrát znovu? (ano/ne): ").lower()
        if play_again != 'ano':
            break

if __name__ == "__main__":
    play_game()