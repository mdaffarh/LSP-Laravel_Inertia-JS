import React from "react";
import "../../../css/style.css";
import headerImage from "../../../src/images/header.jpg";
import { Link, usePage } from "@inertiajs/inertia-react";
import { Inertia } from "@inertiajs/inertia";

export default function Layout({ children }){
    const { user } = usePage().props.auth
    return (
        <>
            {/* Header */}
            <div className="header">
                <img src={headerImage} alt="" />
            </div>

            {/* Menu */}
            <div className="menu">
                <b>
                    <a href="/home">HOME</a>
                    {user?.role == "admin" ? (
                        <>
                            <a href="/guru/index">GURU</a>
                            <a href="/jurusan/index">JURUSAN</a>
                            <a href="/kelas/index">KELAS</a>
                            <a href="/siswa/index">SISWA</a>
                            <a href="/mapel/index">MAPEL</a>
                            <a href="/mengajar/index">MENGAJAR</a>
                        </>
                    ) : (
                        <a href="/nilai/index">NILAI</a>
                    )}
                    <a href="/logout">LOGOUT</a>
                </b>
            </div>

            {/* Content */}
            <div className="content">{children}</div>

            {/* Footer */}
            <div className="footer">
                <b>
                    <p className="mar">2023 - UJIKOM & LSP</p>
                </b>
            </div>
        </>
    );
}