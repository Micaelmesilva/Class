import subprocess

# URLs para abrir no modo incógnito
urls = [
    'https://chatgpt.com/',
    'https://drive.proton.me/'
]

# Comando para abrir Brave no modo incógnito com URLs
brave_command = ['brave-browser', '--incognito'] + urls

# Comando para abrir o VS Code
vscode_command = ['code']

# Executar Brave e VS Code simultaneamente
subprocess.Popen(brave_command)
subprocess.Popen(vscode_command)
