import { Select, Option } from "@material-tailwind/react";

export function SelectDefault() {
    return (
        <div className="w-72">
            <Select label="Select Version">
                <Option>Projetos Web</Option>
                <Option>Projetos Mobile</Option>
            </Select>
        </div>
    );
}