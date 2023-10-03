import './App.css'
import { NavbarDefault } from './components/Navbar'
import { Footer } from './components/Footer'
import { Outlet } from 'react-router-dom'
export default function App() {
  return (

    <h1 className="text-3xl font-bold underline">

      <NavbarDefault />
      <Outlet />
      <Footer />
    </h1>
  );
}
