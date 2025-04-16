
import { View, Text, StyleSheet, Image } from 'react-native'
import React, { useEffect, useState } from 'react'
import Ionicons from '@expo/vector-icons/Ionicons';
import Spacer from '@/components/Spacer';
import { router, Redirect } from 'expo-router';

export default function FinishScreen() {

    const [ progress, setProgress ] = useState<number>(0);

    useEffect(()=> {

        let i = 0;

        const interval = setInterval( ()=> {
        
            setProgress( i );

            if( i == 250 ) {
                clearInterval( interval );
                router.push('/(dashboard)/dashboard');
            }
            i++;


        }, 1 );

    },[]);

    return (
        <View style={ Styles.container }>
            
            <Ionicons name="checkmark-circle-outline" size={40} color="black" />
            <Spacer gap={10}/>
            <Text style={ Styles.header }>Creating your perfect feed</Text>
            <Spacer gap={20}/>
            <View style={ Styles.progressBody }>
                <View style={[ Styles.progress, { width: progress } ]}></View>
            </View>

        </View>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#ffffff',
        alignItems: 'center',
        justifyContent: 'center'
    },
    header: {
        fontFamily: 'Montserrat-Regular',
        fontSize: 18
    },
    progressBody: {
        height: 3,
        width: 250,
        backgroundColor: '#DDD',
        borderRadius: 10,
        overflow: 'hidden'
    },
    progress: {
        height: 3,
        backgroundColor: '#000'
    }
});