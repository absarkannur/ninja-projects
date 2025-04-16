
import { View, Text, TouchableOpacity, StyleSheet } from 'react-native'
import React, { useState } from 'react'
import { Colors } from '@/constants/Colors'


interface StateProps {
    title?: string | null,
    onPress?: any,
    icon?: any,
    disabled?: boolean | false
}

const Button = ({ title, icon, disabled, onPress }: StateProps) => {

    const [ bgcolor, setBgcolor ] = useState('red');

    return (
        <TouchableOpacity 
            disabled={ disabled }
            style={{width: '100%'}}
            activeOpacity={0.6}
            onPress={ onPress }>
            <View style={ ( disabled ) ? Styles.buttonFaceDisabled : Styles.buttonFace  }>
                <View style={ Styles.icon }>
                { icon }
                </View>
                <Text style={ Styles.textStyle }>{ title }</Text>
            </View>
        </TouchableOpacity>
    )
}

export default Button

const Styles = StyleSheet.create({
    buttonFace:{
        backgroundColor: Colors.light.buttonFace,
        height: 50,
        width: '100%',
        paddingLeft: 10,
        paddingRight: 10,
        borderRadius: 10,
        flexWrap: 'wrap',
        justifyContent: 'center',
        alignItems: 'center',
    },
    buttonFaceDisabled: {
        backgroundColor: Colors.light.buttonFaceDisabled,
        height: 50,
        width: '100%',
        paddingLeft: 10,
        paddingRight: 10,
        borderRadius: 10,
        flexWrap: 'wrap',
        justifyContent: 'center',
        alignItems: 'center',
    },
    textStyle: {
        width: '100%',
        fontFamily: 'Montserrat-SemiBold',
        fontSize: 16,
        height: 50,
        lineHeight: 50,
        color: Colors.light.textColorWhite,
        textAlign: 'center',
        paddingLeft: 5,
        paddingRight: 5,
    },
    icon: {
        position: 'absolute',
        alignItems: 'center',
        width: 50,
        left: 10,
    }
});