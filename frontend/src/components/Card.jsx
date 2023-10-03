import {
    Card,
    CardHeader,
    CardBody,
    CardFooter,
    Typography,
    Button,
} from "@material-tailwind/react";

export function CardDefault() {
    return (
        <Card className="mt-6 w-96">
            <CardHeader color="blue-gray" className="relative h-50">
                <img
                    src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80"
                    alt="imagem do cartão"
                    loading="lazy"
                />
            </CardHeader>
            <CardBody>
                <Typography variant="h5" color="blue-gray" className="mb-2">
                    Projeto UI/UX
                </Typography>
                <Typography>
                    O lugar fica perto da Praia de Barceloneta e da parada de ônibus a apenas 2 minutos a pé.
                </Typography>
            </CardBody>
            <CardFooter className="pt-0">
                <Button>Leia mais</Button>
            </CardFooter>
        </Card>
    );
}