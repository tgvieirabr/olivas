import { Typography } from "@material-tailwind/react";

export function Footer() {
    return (
        <footer className="flex w-full flex-row flex-wrap items-center justify-center gap-y-6 gap-x-12 border-none border-blue-gray-50 py-6 text-center md:justify-between">
            <Typography color="blue-gray" className="font-normal">
                &copy; 2023 Olivas
            </Typography>
            <nav role="navigation" aria-label="Links úteis" className="flex flex-wrap items-center gap-y-2 gap-x-8">
                <li>
                    <Typography
                        as="a"
                        href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        title="Saiba mais sobre a empresa"
                        color="blue-gray"
                        className="font-normal transition-colors hover:text-blue-500 focus:text-blue-500"
                    >
                        A Empresa
                    </Typography>
                </li>
                <li>
                    <Typography
                        as="a"
                        href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        title="Leia nossa política de privacidade"
                        color="blue-gray"
                        className="font-normal transition-colors hover:text-blue-500 focus:text-blue-500"
                    >
                        Politica de Privacidade
                    </Typography>
                </li>
                <li>
                    <Typography
                        as="a"
                        href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        title="Entre em contato conosco"
                        color="blue-gray"
                        className="font-normal transition-colors hover:text-blue-500 focus:text-blue-500"
                    >
                        Contato
                    </Typography>
                </li>
            </nav>
            <img src="logo.png" alt="Logo da empresa" />
        </footer>
    );
}