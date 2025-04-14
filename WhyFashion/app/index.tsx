import { View, Text, StyleSheet, Image } from 'react-native'
import React, { useEffect, useRef } from 'react'
import { useVideoPlayer, VideoView } from 'expo-video';
import { Colors } from '@/constants/Colors'
import { router, Redirect, Link } from 'expo-router'
import { StatusBar } from 'expo-status-bar';

import Button from '@/components/Button'
import Spacer from '@/components/Spacer'

export default function SplashScreen() {

    const videoSource = require('@/assets/videos/c7b7b7df5ac798f9899d620fc2ddf1fc.mp4');

    const player = useVideoPlayer(videoSource, player => {
        player.muted = true;
        player.loop = true;
        player.play();
    });

    useEffect(() => {
        
        setTimeout(function(){
            
            // Demo load
            // router.push('/(register)');
            
        }, 5000);
        
    },[]);

    const handleRegister =() => {
        router.push('/(register)/register');
    }

    return (
        <View style={ Styles.container }>
            <StatusBar style="dark" />
            <VideoView 
                contentFit={'cover'}
                nativeControls={false}
                style={Styles.backgroundVideo} player={player} allowsFullscreen allowsPictureInPicture />
            
            <View style={ Styles.wrapper }>
                <View style={ Styles.boxTop }></View>
                <View style={ Styles.boxMiddle }>
                <Image source={require('@/assets/images/react-logo.png')} />
                </View>
                <View style={ Styles.boxBottom }>
                    <View style={ Styles.footer}>
                        
                        <Button title="Register" onPress={ handleRegister } />
                        
                        <Spacer gap={20}/>
                        <Text style={ Styles.signinText }>Already have an account? <Link style={{ textDecorationLine: 'underline' }} href="/(signin)/signin">Signin</Link></Text>
                        
                    </View>
                </View>
            </View>

        </View>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    backgroundVideo: {
        position: 'absolute',
        top: 0,
        left: 0,
        width: '100%',
        height: '100%',
        backgroundColor: 'green'
    },
    wrapper: {
        flex: 1
    },
    boxTop:{
        flex:1,
    },
    boxMiddle:{
        flex:1,
        alignItems: 'center',
        justifyContent: 'center'
    },
    boxBottom: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'flex-end'
    },
    footer: {
        height: 200,
        width: '100%',
        padding: 30
    },
    signinText: {
        color: Colors.light.textColorWhite,
        textAlign: 'center',
        fontFamily: 'Montserrat-SemiBold',
        fontSize: 16
    }
});