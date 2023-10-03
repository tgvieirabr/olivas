
# Define a imagem base para a fase de construção
FROM node:18-alpine

# Define o diretório de trabalho
WORKDIR /usr/app

# Copia o package.json e o package-lock.json para o diretório de trabalho
COPY ./frontend/package*.json .

# Instala as dependências
RUN npm install

# Copia o resto da aplicação
COPY ./frontend/ .

#RUN npm run dev