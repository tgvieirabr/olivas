# Define a imagem base para a fase de construção
FROM node:18-alpine as BUILD_IMAGE

# Define o diretório de trabalho
WORKDIR ./frontend/
# Copia o package.json e o package-lock.json para o diretório de trabalho
COPY package*.json ./frontend

# Instala as dependências
RUN npm install

# Copia o resto da aplicação
COPY . .

# Builda a aplicação
RUN npm run build

# Define a imagem base para a fase de produção
FROM node:18-alpine as PRODUCTION_IMAGE

# Define o diretório de trabalho
WORKDIR ./frontend/

# Copia os arquivos de build da fase de construção
COPY --from=BUILD_IMAGE /app/frontend/dist/ ./dist/

# Expor a porta da aplicação
EXPOSE 8083

# Copia os arquivos de configuração
COPY package*.json .


# Comando para iniciar a aplicação em modo de pré-visualização
CMD [ "npm", "run", "preview" ]
