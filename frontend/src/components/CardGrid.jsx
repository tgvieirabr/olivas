import { CardDefault } from './Card';

const CardGrid = () => {
    return (
        <main>
            <section className="bg-white p-10">
                <h1 className="text-center font-bold text-2xl text-black-500" title="Projetos Recentes">
                    Últimos Trabalhos
                </h1>
                <div className="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-1 my-5">
                    {[...Array(6)].map((_, index) => (
                        <div key={index}>
                            <CardDefault />
                        </div>
                    ))}
                </div>
            </section>
        </main>
    );
};

export default CardGrid;
