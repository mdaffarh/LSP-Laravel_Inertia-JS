import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/inertia-react";
import React, { useState } from "react";
import { usePage } from "@inertiajs/inertia-react";
import "../../../resources/css/style.css";

export default function Login() {
    const { error } = usePage().props.errors;
    const [idAdmin, setIdAdmin] = useState();
    const [nis, setNis] = useState();
    const [nip, setNip] = useState();
    const [password, setPassword] = useState();

    const [formAdminVisible, setFormAdminVisible] = useState(false);
    const [formSiswaVisible, setFormSiswaVisible] = useState(false);
    const [formGuruVisible, setFormGuruVisible] = useState(false);

    const handleLoginAdmin = () => {
        Inertia.post("/login/admin", { 
            idAdmin,
            password,
        });
    };
    const handleLoginSiswa = () => {
        Inertia.post("/login/siswa", { 
            nis,
            password,
        });
    };
    const handleLoginGuru = () => {
        Inertia.post("/login/guru", { 
            nip,
            password,
        });
    };

    return (
        <>
            <Head title="Login" />

            <div className="head">
                <img src="/gambar/header.jpg" alt="" height="40%" width="100%" />
            </div>

            <div className="menu">
                <b>
                    <a href="#" className="active">Home</a>
                </b>
            </div>
            <div className="kiri-atas">
                <fieldset>
                    <legend></legend>
                    <center>
                        <button className="button-primary" onClick={()=>{
                            setFormAdminVisible(!formAdminVisible);
                            setFormSiswaVisible(false);
                            setFormGuruVisible(false);
                        }}>
                            Admin
                        </button>
                        <button className="button-primary" onClick={()=>{
                            setFormAdminVisible(false);
                            setFormSiswaVisible(!formSiswaVisible);
                            setFormGuruVisible(false);
                        }}>
                            Siswa
                        </button>
                        <button className="button-primary" onClick={()=>{
                            setFormAdminVisible(false);
                            setFormSiswaVisible(false);
                            setFormGuruVisible(!formGuruVisible);
                        }}>
                            Guru
                        </button>
                        <hr />
                        <b>Login sesuai dengan user anda</b>
                        <hr />
                    </center>
                    {/* Form Login Admin */}
                    <div className="" style={{ display: formAdminVisible ? "block" : "none" }}>
                        <center>
                            <b>Login Admin</b>
                            <b>{error}</b>
                        </center>
                        <table>
                            <tr>
                                <td className="bar">Kode Admin</td>
                                <td className="bar">
                                    <input type="text" name="" id="" onChange={(e) => setIdAdmin(e.target.value)
                                    } />
                                </td>
                            </tr>
                            <tr>
                                <td className="bar">Password</td>
                                <td className="bar">
                                    <input type="password" name="" id="" onChange={(e) => setPassword(e.target.value)
                                    } />
                                </td>
                            </tr>
                            <tr>
                                <td colSpan="2">
                                    <center>
                                        <button className="button-login" type="button" onClick={() => handleLoginAdmin()}>
                                            Login
                                        </button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>

                    {/* Form Login Siswa */}
                    <div className="" style={{ display: formSiswaVisible ? "block" : "none" }}>
                        <center>
                            <b>Login Siswa</b>
                            <b>{error}</b>
                        </center>
                        <table>
                            <tr>
                                <td className="bar">NIS</td>
                                <td className="bar">
                                    <input type="text" name="" id="" onChange={(e) => setNis(e.target.value)
                                    } />
                                </td>
                            </tr>
                            <tr>
                                <td className="bar">Password</td>
                                <td className="bar">
                                    <input type="password" name="" id="" onChange={(e) => setPassword(e.target.value)
                                    } />
                                </td>
                            </tr>
                            <tr>
                                <td colSpan="2">
                                    <center>
                                        <button className="button-login" type="button" onClick={() => handleLoginSiswa()}>
                                            Login
                                        </button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>

                    {/* Form Login Guru */}
                    <div className="" style={{ display: formGuruVisible ? "block" : "none" }}>
                        <center>
                            <b>Login Guru</b>
                            <b>{error}</b>
                        </center>
                        <table>
                            <tr>
                                <td className="bar">NIP</td>
                                <td className="bar">
                                    <input type="text" name="" id="" onChange={(e) => setNip(e.target.value)
                                    } />
                                </td>
                            </tr>
                            <tr>
                                <td className="bar">Password</td>
                                <td className="bar">
                                    <input type="password" name="" id="" onChange={(e) => setPassword(e.target.value)
                                    } />
                                </td>
                            </tr>
                            <tr>
                                <td colSpan="2">
                                    <center>
                                        <button className="button-login" type="button" onClick={() => handleLoginGuru()}>
                                            Login
                                        </button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>
                </fieldset>
            </div>
            <div className="kanan">
                <center>
                    <h1>
                        SELAMAT DATANG
                        <br />
                        DI WEB PENILAIAN SMKN 1 CIBINONG
                    </h1>
                </center>
            </div>

            <div className="kiri-bawah">
                <center>
                    <p className="mar">Gallery</p>
                    <div className="gallery">
                        <img src="/gambar/g2.jpg" alt="" />
                        <div className="deskripsi">
                            SMK BISA
                        </div>
                    </div>
                </center>
            </div>
        </>
    );
}