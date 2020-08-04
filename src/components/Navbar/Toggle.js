import React, { useState } from 'react';
import {IconToggle} from './styles';
import SideNav from './SideNav';


const Toggle = () => {
    const [open, setOpen] = useState(false)

    return (
        <>
            <IconToggle open={open} onClick={() => setOpen(!open)}>
                <div />
                <div />
                <div />
            </IconToggle>
            <SideNav open={open} />
        </>
    )
}
export default Toggle