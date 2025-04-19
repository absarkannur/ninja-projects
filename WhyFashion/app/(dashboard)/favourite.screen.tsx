import { View, Text } from 'react-native'
import React from 'react'
import AppWrapper from '@/components/AppWrapper'
import Animated, { useSharedValue, withSpring } from 'react-native-reanimated';
import Button from '@/components/Button';
import Spacer from '@/components/Spacer';

export default function FavouriteScreen() {

    const width = useSharedValue(100);

    const handlePress = () => {
        width.value = withSpring( width.value + 50 );
    };

    return (
        <AppWrapper>
            <View style={{ justifyContent: 'center', alignItems: 'center' }}>
                
            <Spacer gap={40}/>

            <Animated.View
                style={{
                    width,
                    height: 100,
                    backgroundColor: 'violet',
                }}
            />

            <Spacer gap={40}/>

            <Button title="Click Me" onPress={ handlePress } />

            </View>
        </AppWrapper>
    )
}