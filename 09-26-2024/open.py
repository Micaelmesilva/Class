import subprocess
import os
from datetime import datetime

def menu(nome_da_pasta):
    print("========================")
    print("1- Orientação a Objetos.")
    print("2- Desenvolvimento Web")
    print("3- Banco de Dados.")
    
    while True:
        try:
            opcao = int(input("Informe a Aula: "))
            if opcao == 1:
                orientacao_objetos(nome_da_pasta)
                break
            elif opcao == 2:
                desenvolvimento_web(nome_da_pasta)
                break
            elif opcao == 3:
                banco_de_dados(nome_da_pasta)
                break
            else:
                print("Opção inválida! Tente novamente.")
        except ValueError:
            print("Entrada inválida! Por favor, digite um número.")

def orientacao_objetos(nome_da_pasta):
    urls = [
        'https://chatgpt.com/',
        'https://drive.proton.me/',
        'https://github.com/ddomenicoifpr/orientObjetos2024',
        'https://ava.ifpr.edu.br/course/view.php?id=11398'
    ]
    subprocess.Popen(['brave-browser', '--incognito'] + urls)

    caminho_pasta = os.path.expanduser(f"~/Área de Trabalho/{nome_da_pasta}/exercicios/ex1/modelo")
    os.makedirs(caminho_pasta, exist_ok=True)
    
    caminho_arquivo = os.path.expanduser(f"~/Área de Trabalho/{nome_da_pasta}/exercicios/ex1/exercicio.php")
    with open(caminho_arquivo, 'w') as arquivo:
        arquivo.write('<?php\n')

def desenvolvimento_web(nome_da_pasta):
    urls = [
        'https://chatgpt.com/',
        'https://drive.proton.me/',
        'https://github.com/IFPR-Desenvolvimento-Web',
        'https://ava.ifpr.edu.br/course/view.php?id=11429'
    ]
    subprocess.Popen(['brave-browser', '--incognito'] + urls)

    caminho_pasta = os.path.expanduser(f"~/Área de Trabalho/{nome_da_pasta}/projeto")
    os.makedirs(caminho_pasta, exist_ok=True)

    # Inicia o servidor PHP
    subprocess.Popen(['php', '-S', 'localhost:8080', '-t', caminho_pasta])

    # Criação do arquivo index.html
    caminho_arquivo1 = os.path.expanduser(f"~/Área de Trabalho/{nome_da_pasta}/projeto/index.html")
    with open(caminho_arquivo1, 'w') as arquivo:
        arquivo.write('<!DOCTYPE html>\n')
        arquivo.write('<html lang="en">\n')
        arquivo.write('<head>\n')
        arquivo.write(' <meta charset="UTF-8">\n')
        arquivo.write(' <meta name="viewport" content="width=device-width, initial-scale=1.0">\n')
        arquivo.write(' <link rel="stylesheet" href="styles.css">\n')  # Link para o CSS
        arquivo.write(' <title>Document</title>\n')
        arquivo.write('</head>\n')
        arquivo.write('<body>\n')
        arquivo.write('</body>\n')
        arquivo.write('</html>\n')

    # Criação do arquivo styles.css
    caminho_arquivo2 = os.path.expanduser(f"~/Área de Trabalho/{nome_da_pasta}/projeto/styles.css")
    with open(caminho_arquivo2, 'w') as arquivo_css:
        arquivo_css.write('body {\n')
        arquivo_css.write('    background-color: black;\n')
        arquivo_css.write('}\n')

def banco_de_dados(nome_da_pasta):
    urls = [
        'https://chatgpt.com/',
        'https://drive.proton.me/',
        'https://ava.ifpr.edu.br/course/view.php?id=12571'
    ]
    subprocess.Popen(['brave-browser', '--incognito'] + urls)

data_atual = datetime.now()
nome_da_pasta = data_atual.strftime("%m-%d-%Y")
caminho_da_pasta = os.path.expanduser(f"~/Área de Trabalho/{nome_da_pasta}")
os.makedirs(caminho_da_pasta, exist_ok=True)

menu(nome_da_pasta)

subprocess.Popen(['code', caminho_da_pasta])
subprocess.Popen(['xdg-open', caminho_da_pasta])


